import { useState, setFormData } from 'react';

function Form({ showForm }) {
  const [alabama, setAlabama] = useState('');

  const go = () => {
    setFormData({ alabama });
  };

  if (!showForm) {
    return null;
  }
  return (
    <>
      <h1>Create a new account</h1>

      <fieldset>
        <form class="form" method="post">
          <label>Name</label>
          <input
            type="text"
            value={alabama}
            onChange={(e) => setAlabama(e.target.value)}
            name="name"
          />
          <label>Surname</label>
          <input
            type="text"
            value={alabama}
            onChange={(e) => setAlabama(e.target.value)}
            name="surname"
          />
          <label>Personal number</label>
          <input
            type="text"
            value={alabama}
            onChange={(e) => setAlabama(e.target.value)}
            name="personalid"
          />
          <label>Account Number</label>

          <button class="form_btn" type="button" onClick={go}>
            Submit
          </button>
        </form>
      </fieldset>
    </>
  );
}
export default Form;
