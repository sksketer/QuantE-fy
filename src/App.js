import './App.css';
import NavBar from './component/NavBar';
import RightBar from './component/RightBar';
import LeftBar from './component/LeftBar';
import Main from './component/Main';
import Footer from './component/Footer';
import {Component} from 'react';

class App extends Component {
  state = {
    componentToRender: ""
  }
  
  myfun = (event) => {
    this.setState({ componentToRender: event.target.textContent});
  }

  render() {
    return (
      <div className="App">
        <NavBar />
        <div className="main">
          <LeftBar myfun={this.myfun}/>
          <Main componentToRender={this.state.componentToRender} />
          {/* <RightBar /> */}
        </div>
        <Footer />
      </div>
    );
  }
}

export default App;
