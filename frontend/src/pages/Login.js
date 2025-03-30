import React, { useState } from "react";
import { useNavigate } from "react-router-dom";
import axios from "axios";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

const Login = () => {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [error, setError] = useState("");
    const navigate = useNavigate();

    const LogarUsuario = async (e) => {
        e.preventDefault();
        try {
            const response = await axios.post(
                "http://127.0.0.1:8000/api/login",
                { 
                    email, 
                    password
                },
                { 
                  headers: { "Content-Type": "application/x-www-form-urlencoded" } 
                }
              );
            if (response.status === 200) {
                localStorage.setItem("token", response.data.token.split("|")[1]);
                console.log(localStorage.getItem('token'))
                navigate("/produtos");
            }
        } catch (error) {
            console.log(error.response.data)
            setError("E-mail e/ou senha inválido(s).");
        }
    };

    return (
        <div className="mt-5">
            <div className="row m-auto">
                <div className="col-4"></div>
                <div className="col-4">
                    <div className="card">
                        <div className="card-body">
                            <div className="position-relative">
                                <div className="position-absolute top-0 start-50 translate-middle">
                                    <h4 className="mt-2">Login</h4>
                                </div>
                                <form onSubmit={LogarUsuario}>
                                    <div className="row">
                                        <div className="col-12 mt-5">
                                            <input type="email" className="form-control"  id="email" onChange={(e) => setEmail(e.target.value)} placeholder="E-mail"></input>
                                        </div>
                                    </div>
                                    <div className="row mt-2">
                                        <div className="col-12">
                                            <input type="password" className="form-control" id="password" onChange={(e) => setPassword(e.target.value)} placeholder="Senha"></input>
                                        </div>
                                    </div>
                                    <div className="d-grid gap-2 mt-2">
                                        <button type="submit" className="btn btn-primary">Entrar</button>
                                    </div>
                                    {error && <p className="error">{error}</p>}
                                    <p><a className="link-offset-2 link-underline link-underline-opacity-0 mt-4" href="cadastrar">Cadastrar</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-4"></div>
            </div>
        </div>
    )
}

export default Login;