import React, { useState } from 'react';
import './index.css';


function App() {
  const [backgroundColor, setBackgroundColor] = useState('white');

  const toggleBackgroundColor = () => {
    setBackgroundColor(prevColor => prevColor === 'white' ? 'lightblue' : 'white');
  };

  return (
    <div className="container" style={{ backgroundColor }}>
      <button onClick={toggleBackgroundColor}>Toggle Background Color</button>
    </div>
  );
}

export default App;
