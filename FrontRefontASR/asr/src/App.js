import './App.css';
import React, { Component } from 'react';
import {BrowserRouter, Routes, Route} from "react-router-dom";

import Home from './views/Home/Home';
import User from './views/User';
import Contact from './views/Contact';
import Navbar from './components/UI/NavBar//NavBar.js';
import Error from './components/Error';



function App() {
  return (
    <div>
      {/* basename => domaine ou sous domaine */}
      <BrowserRouter>
        <Navbar/>  
        {/* indiquer acceder a une route en particulier et une seule  
        Permet d'indiquer la premiere route qui correspond a l'adresse demandée
        */}
        <Routes>
                        {/* route pour une url donnée */}
                        <Route path="/" exact element={<Home />} />
                        <Route path="/utilisateurs" exact element={<User />} />
                        <Route path="/contact" exact element={<Contact/>} />
                        <Route path="*" element={<Error type="404" />} />

                       
        </Routes> 
      </BrowserRouter>
    </div>
  );
}

export default App;
