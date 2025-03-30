import React from "react";
import { Link } from "react-router-dom";

const Categorias = () => {
  const categorias = ["Eletrônicos", "Roupas", "Livros", "Móveis"];

  return (
    <div>
      <h2>Categorias</h2>
      <ul>
        {categorias.map((categoria, index) => (
          <li key={index}>
            <Link to={`/produtos?categoria=${categoria.toLowerCase()}`}>
              {categoria}
            </Link>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default Categorias;