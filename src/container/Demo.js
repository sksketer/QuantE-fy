import { Component } from 'react';
import ReactDOM from 'react-dom';

class Demo extends Component{
    render() {
        return <div>
                    <h1>Hello {this.props.name}</h1>
                    <p>How are you</p>
        </div>
    }
}

export default Demo;