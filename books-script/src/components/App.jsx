


import {Books} from '..books/';

import '../index.css';
function App() {
 
  return (
    <>
     <div>
      <swiper-container effect="cards" autoplay="true">
            {
              Books.map((book, i) => (
                <swiper-slide>
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
