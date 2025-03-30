import React, { useState, useEffect } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";
import Navbar from "../components/Navbar";

const Produtos = () => {
  const [produtos, setProdutos] = useState([]);
  const navigate = useNavigate();

  useEffect(() => {
    const token = localStorage.getItem('token');

    const fetchProdutos = async () => {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/products', {
          headers: { Authorization: `Bearer ${token}` }
        });

        if (response.status === 200) {
          setProdutos(response.data.data);
        } else {
          navigate("/login");
        }
      } catch (error) {
        navigate("/login");
      }
    };

    fetchProdutos();
  }, [navigate]);

  // Função para dividir os produtos em grupos de 3
  const dividirEmGrupos = (arr, tamanho) => {
    const grupos = [];
    for (let i = 0; i < arr.length; i += tamanho) {
      grupos.push(arr.slice(i, i + tamanho));
    }
    return grupos;
  };

  // Agora chamamos dividirEmGrupos depois que produtos é atualizado
  const produtosEmGrupos = dividirEmGrupos(produtos, 3);

  return (
    <div>
      <Navbar />
      <div className="container mt-2">
        {produtosEmGrupos.map((grupo, index) => (
          <div key={index} className="row">
            {grupo.map((produto) => (
              <div key={produto.id} className="col-md-4">
                <div className="card produto-card mt-2" style={{ width: "18rem", maxHeight: "30rem" }}>
                  <img
                    src={`http://127.0.0.1:8000/${produto.image_url}`}
                    className="card-img-top"
                    style={{ maxHeight: "20rem" }}
                    alt={produto.name}
                  />
                  <div className="card-body">
                    <h5 className="card-title">{produto.name}</h5>
                    <p className="card-text">R$ {produto.price.replace(".", ",")}</p>
                    <a href={`produtos/${produto.id}`} className="btn btn-primary">Ver detalhes</a>
                  </div>
                </div>
              </div>
            ))}
          </div>
        ))}
      </div>
    </div>
  );
};

export default Produtos;