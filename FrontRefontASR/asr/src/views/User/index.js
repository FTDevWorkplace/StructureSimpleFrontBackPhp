import React, { useEffect, useState, Component } from "react";
import axios from 'axios';

const User = () => {

        const [users, setUsers] = useState([]);


        useEffect(() => {
        axios.get("http://localhost:8090/ServeurRefonteAsr/users")
        .then(response => {
                setUsers(response.data);
        })
        .catch(error => console.log(error))
        }, []);


        return (
                <>
                        <h1>User</h1>
                        <div>La page des utilisateurs</div>
                        <div className="container">
                             {
                                users && users.map(user =>{
                                        return <div><b>nom :</b> {user.nom}  <b>date_pass</b> : {user.date_pass}  <b>accreditation</b> : {user.accreditation} </div>
                                })
                             }   
                        </div>




                </>

          );
}
 
export default User;