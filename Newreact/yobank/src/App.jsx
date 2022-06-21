import { useEffect } from 'react';
import { useState } from 'react';
import './App.css';
import Home from './Components/Home';
import Form from './Components/Form';
import axios from 'axios';

function App() {
  const [account, setAccount] = useState([]);
  const [showForm, setShowForm] = useState(false);
  const [formData, setFormData] = useState(null);

  useEffect(() => {
    axios
      .get('http://yolabank.lt/api/home')
      .then((res) => setAccount(res.data));
  }, []);

  useEffect(() => {
    if (formData === null) return;
    axios.post('http://yolabank.lt/api/home').then((res) => {});
  }, [formData]);

  return (
    <div className="App">
      <Home account={account} />
      <button onClick={() => setShowForm((f) => !f)}> Fill in the form </button>
      <Form showForm={showForm} setFormData={setFormData} />
    </div>
  );
}

export default App;
