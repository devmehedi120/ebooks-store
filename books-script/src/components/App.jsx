


import {Books} from '../data.js';

import '../index.css';
import { register } from 'swiper/element/bundle';
register();

function App() { 
  return (
    <>
     <div className='ces-w-1/3'>
      <swiper-container effect="cards" autoplay="true">
            {
              Books.map((book, i) => (
                <swiper-slide key={i}>
                  <img src={book.cover_image} alt='hello img' width="200px" />
                </swiper-slide>
              ))
            }
          </swiper-container>
     </div>
    </>
  )
}

export default App
