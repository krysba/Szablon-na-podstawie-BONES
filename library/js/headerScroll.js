// *******************************************/
//funkcja zmieniająca kolor po przewinięciu  */
//pierwsza udana działająca wersja           */
// wersja 0.1                                */
// *******************************************/
window.onload = function() {
  let zmiana = document.querySelector('.header');
  let scr = 500;//ustawienie zmiennej momentu zmiany koloru 

window.addEventListener('scroll', () => {
  const scrollable=document.documentElement.scrollHeight - window.innerHeight;
  const scrolled=window.scrollY;
  console.log(scrolled)


    if (scrolled<scr){
      zmiana.classList.remove('active')
      zmiana.classList.add('header')

    } else {
      zmiana.classList.add('active')
      zmiana.classList.remove('header')

    }//hura udało się :)
  });
};
// *********** koniec funkcji **********//