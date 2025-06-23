import './bootstrap';
import '../css/app.css';

setInterval(() => {
    fetch('/keep-alive');
}, 5 * 60 * 1000); // every 5 minutes
