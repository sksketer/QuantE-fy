import React, {Component} from 'react';
import ReactDOM from 'react';
import '../css/main.css';
import NumberSystem from './Topics/NumberSystem';
import Divisibility from './Topics/Divisibility';
import Default from './Topics/Default';
import RatioAndProportion from './Topics/RatioAndProportion';

const Main = ({componentToRender}) => {

    let page = componentToRender;
    let show;
    if(page == "") show = <Default />;
    else if(page == "Number System") show = <NumberSystem />;
    else if(page == "Divisibility") show = <Divisibility />;
    else if(page == "RatioAndProportion") show = <RatioAndProportion />;

    return (
        <div className="main-container">
            {show}
        </div>
    )

}

export default Main;