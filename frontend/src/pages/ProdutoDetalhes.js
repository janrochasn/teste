import React, { useState, useEffect } from "react";
import { useNavigate, useLocation, useParams } from "react-router-dom";
import axios from "axios";
import Navbar from "../components/Navbar";

const ProdutoDetalhes = () => {
  const [produto, setProduto] = useState(null);
  const { id } = useParams();
  const navigate = useNavigate();

  const fetchDetalhesProduto = async () => {
    try {
      const token = localStorage.getItem('token');
      const url = `http://127.0.0.1:8000/api/products/${id}`;
      const response = await axios.get(url, {
        headers: { Authorization: `Bearer ${token}` }
      });

      if (response.status === 200) {
        setProduto(response.data[0]);
      } else if (response.status === 401) {
        navigate("/login");
      }
    } catch (error) {
      console.error(error);
      //navigate("/login");
    }
  };

  useEffect(() => {
    if (id) {
      fetchDetalhesProduto();
    }
  }, [id]);

  return (
    <div>
      <Navbar />
      <div className="container mt-5">
        <div className="row">
          <div className="col">
            <img className="img-produto"
              src={produto ? `http://127.0.0.1:8000/${produto.image_url}` : 'Carregando...'}
              alt={produto ? produto.name : 'Carregando...'}
            /></div>
          <div className="col">
            <div className="row">
              <h4>{produto ? produto.name : 'Carregando...'}</h4>
            </div>
            <div className="row mt-2">
              <h5>R$ { produto ? produto.price.replace(".", ",") : 'Carregando...'}</h5>
            </div>
            <div className="row mt-2">
              <div className="col-3">
                <h5>Descrição: </h5>
              </div>
              <div className="col-9">
                { produto ? produto.description : 'Carregando...'}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
};

export default ProdutoDetalhes;