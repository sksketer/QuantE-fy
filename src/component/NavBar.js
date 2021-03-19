import React, {Component} from 'react';
import ReactDOM from 'react';
import "../css/nav.css";

const NavBar = () => {
    return <div className="nav-bar">
                <div className="logo"> <img src="" alt="Image Not Found"></img> </div>
                <div className="links"> 
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Quiz</a></li>
                        <li><button>Sign-in</button></li>
                    </ul>
                </div>
            </div>

}
export default NavBar;