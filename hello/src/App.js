import logo from './logo.svg';
import './App.css';
import Greet from './components/Greet'
import Welcome from './components/Welcome';
import Message from './components/Message';
function App() {
  return (
    <div className="App">
      <Message />
      <Greet name="Lemon" heroname="Spiderman"><p>This is children</p></Greet>
      <Greet name="Mim" heroname="Superman"><button>Child Button</button></Greet>
      <Greet name="Jim" heroname="Batman"></Greet>
      <Welcome name="Lemon" heroname="Spiderman" />
      <Welcome name="Mim" heroname="Superman" />
    </div>
  );
}

export default App;
