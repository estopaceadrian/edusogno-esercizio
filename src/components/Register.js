import React, { useState } from 'react';
import axios from 'axios';
import { eye } from '../assets/images';
import { useNavigate } from 'react-router-dom';

function Register() {
  const navigate = useNavigate();
  const [inputs, setInputs] = useState({});
  const [showPassword, setShowPassword] = useState(false);

  const handleChange = (e) => {
    const name = e.target.name;
    const value = e.target.value;
    setInputs((values) => ({ ...values, [name]: value }));
  };
  const handleSubmit = async (e) => {
    e.preventDefault();
    await axios
      .post('http://localhost/edu/', inputs)
      .then(function (response) {
        console.log(response);
        if (response.status === 200) {
          setTimeout(() => {
            navigate('/events');
          }, 2000);
        }
      })
      .catch((error) => {
        throw error;
      });
  };
  return (
    <>
      <div className="title">Crea il tuo account</div>
      <div className="App">
        <form onSubmit={handleSubmit}>
          <fieldset>
            <div className="Field">
              <label>Inserisci il nome</label>
              <input onChange={handleChange} name="nome" placeholder="Mario" />
            </div>
            <div className="Field">
              <label>Inserisci il cognome</label>
              <input
                onChange={handleChange}
                name="cognome"
                placeholder="Rossi"
              />
            </div>
            <div className="Field">
              <label>Inserisci l'email</label>
              <input
                className="form-control"
                onChange={handleChange}
                name="email"
                type="email"
                placeholder="name@example.com"
              />
            </div>
            <div className="Field">
              <label>Inserisci la password</label>
              <input
                type={showPassword ? 'text' : 'password'}
                name="password"
                onChange={handleChange}
                placeholder="Scrivila qui"
              />
              <div
                role="button"
                onClick={() => setShowPassword((prev) => !prev)}
              >
                <img src={eye} className="eye" />
              </div>
            </div>

            <button type="submit">REGISTRATI</button>
            <div className="forgotpw">
              Hai già un account<strong>? Accedi</strong>
            </div>
          </fieldset>
        </form>
      </div>
    </>
  );
}

export default Register;
