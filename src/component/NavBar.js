import React, {Component} from 'react';
import ReactDOM from 'react';
import "../css/nav.css";

const NavBar = () => {
    return <div className="nav-bar">
                <div className="logo"> <img src="../img/logo.png" alt="QuantE-fy"></img> </div>
                <div className="links"> 
                    <ul>
                        <li><a href="http://localhost:3000/">Home</a></li>
                        <li><a href="http://localhost/quantE-FY/src/php/view-doubts.php" target="_blank">Doubts Question</a></li>
                        <li><a href="http://localhost/QuantE-FY/src/php/check.php" target="_blank">Quiz</a></li>
                    </ul>
                </div>
            </div>

}
export default NavBar;