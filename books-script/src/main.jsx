import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './components/App.jsx'
if(document.getElementById('ebookStore')){
ReactDOM.createRoot(document.getElementById('ebookStore')).render(
  <React.StrictMode>
    <App />  
  </React.StrictMode>,
)
}