class DW_controller{
    constructor() {
        // ici le dom n'est pas encore pret
        // pour le moment rien a faire
    }

    run(){
        console.log('coucou');
    }
}
window.dw = new DW_controller();
window.document.addEventListener('load',()=> window.dw.run());