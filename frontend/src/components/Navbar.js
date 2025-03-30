import React, { useState, useEffect } from "react";
import { useNavigate } from "react-router-dom";
import axios from "axios";

const Navbar = () => {
    const navigate = useNavigate();
    const [categorias, setCategorias] = useState([]);

    useEffect(() => {
    const token = localStorage.getItem('token');
    const BuscarCategorias = async (e) => {
        try {
            const response = await axios.get('http://127.0.0.1:8000/api/categories', {
                headers: { Authorization: `Bearer ${token}` }
            });
            setCategorias(response.data)
        } catch (error) {
            console.log(error)
        }
    };
    BuscarCategorias();
    }, []);

    return (
        <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
            <div className="container-fluid">
                <a className="navbar-brand" href="#"></a>
                <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                </button>
                <div className="collapse navbar-collapse" id="navbarColor01">
                    <ul className="navbar-nav me-auto mb-2 mb-lg-0">
                        <li className="nav-item">
                            <a className="nav-link" href="/produtos">Produtos</a>
                        </li>
                        <li className="nav-item dropdown">
                            <a className="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>
                            <ul className="dropdown-menu" aria-labelledby="navbarDropdown">
                                {categorias.map((categoria) => (
                                    <li><a className="dropdown-item" href={`produtos?categoria=${categoria.id}`}>{categoria.name}</a></li>
                                ))}
                            </ul>
                        </li>
                    </ul>
                    <form className="d-flex">
                        <input className="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search"></input>
                        <button className="btn btn-outline-light" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
    );
};

export default Navbar;