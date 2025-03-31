import React, { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

const Cadastrar = () => {
    const [name, setName] = useState("");
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    let [errors, setErrors] = useState([]);

    const navigate = useNavigate();

    const CadastrarUsuario = async (e) => {
        e.preventDefault();
        try {
            const response = await axios.post(
                "http://127.0.0.1:8000/api/register",
                {
                    name,
                    email,
                    password
                },
                {
                    headers: { "Content-Type": "application/x-www-form-urlencoded" }
                }
            );
            if (response.status === 200) {
                alert('Usuário cadastrado com sucesso.')
                navigate("/login");
            }
        } catch (error) {
            for (const [key, value] of Object.entries(error.response.data)) {
                setErrors((prevErrors) => [...prevErrors, value]);
            }
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
                                    <h4 className="mt-2">Cadastrar</h4>
                                </div>
                                <form onSubmit={CadastrarUsuario}>
                                    <div className="row">
                                        <div className="col-12 mt-5">
                                            <input type="name" className="form-control" id="name" onChange={(e) => setName(e.target.value)} placeholder="Nome"></input>
                                        </div>
                                    </div>
                                    <div className="row">
                                        <div className="col-12 mt-2">
                                            <input type="email" className="form-control" id="email" onChange={(e) => setEmail(e.target.value)} placeholder="E-mail"></input>
                                        </div>
                                    </div>
                                    <div className="row mt-2">
                                        <div className="col-12">
                                            <div class="input-group">
                                                <input type="password" className="form-control" id="password" onChange={(e) => setPassword(e.target.value)} placeholder="Senha"></input>
                                                <span class="input-group-text" title={`A senha deve conter:
                                                    - Pelo menos 12 caracteres
                                                    - Uma letra maiúscula
                                                    - Uma letra minúscula
                                                    - Um número
                                                    - Um caractere especial`}>i
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="d-grid gap-2 mt-2">
                                        <button type="submit" className="btn btn-primary">Entrar</button>
                                    </div>
                                    <div>
                                        {errors.length > 0 && (
                                            <ul>
                                                {errors.map((error, index) => (
                                                    <li key={index}>{error}</li>
                                                ))}
                                            </ul>
                                        )}
                                    </div>
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

export default Cadastrar;