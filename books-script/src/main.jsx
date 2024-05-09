import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './components/App.jsx'
import { register } from 'swiper/element/bundle';
register();

ReactDOM.createRoot(document.getElementById('ebookStore')).render(
  <React.StrictMode>
    <App />  
  </React.StrictMode>,
)
