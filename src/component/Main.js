import React, {Component} from 'react';
import ReactDOM from 'react';
import '../css/main.css';
import NumberSystem from './Topics/NumberSystem';

const Main = () => {
    return (
        <div className="main-container">
            {/* <h4>Welcome to QuantE-fy</h4>
            <p>All Quant and Reasning questions Best solution are here.</p> */}
            <NumberSystem />


        </div>
    )

}

export default Main;