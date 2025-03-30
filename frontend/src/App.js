import logo from './logo.svg';
import './App.css';
import { BrowserRouter, Routes, Route, Link, useNavigate, Navigate  } from "react-router-dom";
import Categorias from "./pages/Categorias";
import Produtos from "./pages/Produtos";
import ProdutoDetalhe from "./pages/ProdutoDetalhes";
import Login from "./pages/Login";
import Cadastrar from "./pages/Cadastrar";

const App = () => {
  return (
      <BrowserRouter>
        <Routes>
          <Route path="categorias" element={<Categorias />} />
          <Route path="produtos" element={<Produtos />} />
          <Route path="produtos/:id" element={<ProdutoDetalhe />} />
          <Route path="login" element={<Login />} />
          <Route path="cadastrar" element={<Cadastrar />} />
          <Route path="/" element={<Produtos />} />
        </Routes>
      </BrowserRouter>
  );
};

export default App;
