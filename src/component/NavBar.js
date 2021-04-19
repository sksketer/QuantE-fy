import React, {Component} from 'react';
import ReactDOM from 'react';
import "../css/nav.css";

const NavBar = () => {
    return <div className="nav-bar">
                <div className="logo"> <img src="" alt="L7L7L7L7L7L7L7"></img> </div>
                <div className="links"> 
                    <ul>
                        <li><a href="#">Home</a></li>
                        {/* <li><a href="#">Quiz</a></li> */}
                        <li><a href="http://localhost/QuantE-FY/src/php/ask.html" target="_blank">Quiz</a></li>
                    </ul>
                </div>
            </div>

}
export default NavBar;