import React from "react";
import logo from "../../../assets/images/logo.png";

// React router => évite rechargement des pages, single page application : link de react router
// permet de gérer le systeme de classe css permet d'indiquer le lien qu'on est en train d'utiliser 
import {NavLink} from "react-router-dom";

const navbar = (props) => (
    <>
        <nav className="navbar navbar-expand-lg navbar-dark bg-primary">
            <a className="navbar-brand" href="/">
                <img src={logo} alt='logo My Zoo' width='50px' className="rounded"/>
            </a>
            <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span className="navbar-toggler-icon"></span>
            </button>

            <div className="collapse navbar-collapse" id="navbarColor01">
                <ul className="navbar-nav mr-auto">
                    <li className="nav-item">
                        <NavLink end to="/"  className="nav-link">Accueil</NavLink>
                    </li>
                    <li className="nav-item">
                        <NavLink end to="/utilisateurs"  className="nav-link">Les utilisateurs</NavLink>
                    </li>
                    <li className="nav-item">
                        <NavLink end to="/contact"  className="nav-link">Contact</NavLink>
                    </li>
                </ul>
            </div>
        </nav>
    </>
);

export default navbar;