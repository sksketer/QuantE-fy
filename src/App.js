import './App.css';
import NavBar from './component/NavBar';
import RightBar from './component/RightBar';
import LeftBar from './component/LeftBar';
import Main from './component/Main';
import Footer from './component/Footer';

function App() {
  return (
    <div className="App">
      <NavBar />
      <LeftBar />
      <Main />
      <RightBar />
      <Footer />
    </div>
  );
}

export default App;
