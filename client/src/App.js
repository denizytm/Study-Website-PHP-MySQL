import './App.css';
import { Naber } from './components/Naber.jsx';
import {Home} from './pages/Home/Home.jsx';
import {BrowserRouter , Routes ,Route} from "react-router-dom"

function App() {

  return (
    <BrowserRouter>
      <Routes>
        <Route path='/' element={<Home />} />
        <Route path='/naber' element={<Naber />} />
      </Routes>
    </BrowserRouter> 
  );
}

export default App;
