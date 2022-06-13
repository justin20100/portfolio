class DW_controller{
    constructor() {
        // ici le dom n'est pas encore pret
        // pour le moment rien a faire
    }

    run(){
        const threshold = .1
        const options = {
            root: null,
            rootMargin: '0px',
            threshold
        }
        const handleIntersect = function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.intersectionRatio > threshold) {
                    entry.target.classList.remove('reveal')
                    observer.unobserve(entry.target)
                }
            })
        }
        document.documentElement.classList.add('reveal-loaded')
        window.addEventListener("DOMContentLoaded", function () {
            const observer = new IntersectionObserver(handleIntersect, options)
            const targets = document.querySelectorAll('.reveal')
            targets.forEach(function (target) {
                observer.observe(target)
            })
        })
    }
}
window.dw = new DW_controller();
window.document.addEventListener('load',()=> window.dw.run());