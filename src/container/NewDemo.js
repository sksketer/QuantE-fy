import { Component } from 'react';
import ReactDOM from 'react-dom';

class newDemo extends Component{
    render() {
        let result;
        if(this.props.name == "sketer"){
            result= <div>
                <p>you are okey or not</p>
                <p>I think you are fine but exam are comming, so small tension in going in mind.</p>
           </div>;
        }
        else {
            result = <div>
                <p>I think your are not okey</p>
                <p>Because exam are coming and you did not study and reason is you didnot attend the classes</p>
            </div>;
        }
        return  result;
    }
}

export default newDemo;