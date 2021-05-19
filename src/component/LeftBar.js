import React, {Component} from 'react';
import ReactDOM from 'react';
import '../css/left-bar.css';

const LeftBar = (props) => {
    const buttons = ["Number System", "Divisibility", "Factors and multiples", "Ratio and Proportation", "Simple Interest", "Percentage", "Divisibility", "Average", "Ratio And Proportion","Mixture And Alligations"];
    const topics = buttons.map((buttonName, index) => {
        return (
            <h6 key={index}><button onClick={props.myfun}>{buttonName}</button></h6>
        )
    });

    return (
            <div className="left-bar">
                <h4>Topics</h4>
                {topics}

            </div>)


}

export default LeftBar;