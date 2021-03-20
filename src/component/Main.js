import React, {Component} from 'react';
import ReactDOM from 'react';
import '../css/main.css';
import NumberSystem from './Topics/NumberSystem';
import Divisibility from './Topics/Divisibility';
import Default from './Topics/Default';

const Main = () => {

    let page = "";
    page = "NumberSystem";
    let show;
    if(page == "")
    {
        show = <Default />;
    }
    else if(page == "NumberSystem")
    {
        show = <NumberSystem />;
    }
    else if(page == "Divisibility")
    {
        show = <Divisibility />;
    }

    return (
        <div className="main-container">
            {show}
        </div>
    )

}

export default Main;