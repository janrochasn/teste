import React, { useState, useEffect } from "react";
import axios from "axios";
import { useNavigate, useLocation } from "react-router-dom";
import Navbar from "../components/Navbar";

const Produtos = () => {
  const [produtos, setProdutos] = useState([]);
  const [paginaAtual, setPaginaAtual] = useState(1);
  const [totalPaginas, setTotalPaginas] = useState(1);
  const navigate = useNavigate();
  const location = useLocation();

  const fetchProdutos = async (pagina) => {
    try {
      const token = localStorage.getItem('token');
      const urlAtual = window.location.href
      let url = '';
      let type = '';

      if (urlAtual.includes('categoria')) {
        url = `http://127.0.0.1:8000/api/products?category=${urlAtual.split("=")[1]}`;
        type = 'categories';
      } else if (urlAtual.includes('search')) {
        url = `http://127.0.0.1:8000/api/products?search=${urlAtual.split("=")[1]}`;
        type = 'search';
      } else {
        url = `http://127.0.0.1:8000/api/products?page=${pagina}`;
        type = 'all';
      }
      const response = await axios.get(url, {
        headers: { Authorization: `Bearer ${token}` }
      });

      if (response.status === 200) {
        if(type == 'categories' || type == 'search') {
          setProdutos(response.data);
        } else {
          setProdutos(response.data.data);
          setTotalPaginas(response.data.last_page);
        }
      } else {
        navigate("/login");
      }
    } catch (error) {
      console.log(error);
      navigate("/login");
    }
  };

  useEffect(() => {
    const query = new URLSearchParams(location.search);
    const page = query.get("page") ? parseInt(query.get("page")) : 1;
    setPaginaAtual(page);
    fetchProdutos(page);
  }, [location.search, navigate]);

  const dividirEmGrupos = (arr, tamanho) => {
    const grupos = [];
    for (let i = 0; i < arr.length; i += tamanho) {
      grupos.push(arr.slice(i, i + tamanho));
    }
    return grupos;
  };

  const paginaAnterior = () => {
    if (paginaAtual > 1) {
      const novaPagina = paginaAtual - 1;
      setPaginaAtual(novaPagina);
      navigate(`?page=${novaPagina}`);
    }
  };

  const proximaPagina = () => {
    if (paginaAtual < totalPaginas) {
      const novaPagina = paginaAtual + 1;
      setPaginaAtual(novaPagina);
      navigate(`?page=${novaPagina}`);
    }
  };
  
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
      <div className="d-flex justify-content-center mt-3 mb-3">
        <button className="btn btn-secondary me-2" onClick={paginaAnterior} disabled={paginaAtual === 1}>
          Anterior
        </button>
        <span>Página {paginaAtual} de {totalPaginas}</span>
        <button className="btn btn-secondary ms-2" onClick={proximaPagina} disabled={paginaAtual === totalPaginas}>
          Próxima
        </button>
      </div>
    </div>
  );
};

export default Produtos;
