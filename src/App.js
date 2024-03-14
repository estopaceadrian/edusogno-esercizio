import './assets/styles/style.css';
import Register from './components/Register';
import { BrowserRouter, Route, Routes } from 'react-router-dom';
import Header from './components/Header';
import Footer from './components/Footer';
import Events from './components/Events';
function App() {
  return (
    <div className="bg-image">
      <Header />
      <BrowserRouter>
        <Routes>
          <Route exact path="/" element={<Register />} />
          <Route exact path="/events" element={<Events />} />
        </Routes>
      </BrowserRouter>
      <Footer />
    </div>
  );
}

export default App;
