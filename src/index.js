// ## vendors
import 'bootstrap/dist/css/bootstrap-reboot.css'
import 'tailwindcss/tailwind.css'

// ## originals
import './scripts/index'
import './styles/index.styl'

// svg
function requireAll(r) {
  r.keys().forEach(r)
}
requireAll(require.context('./images/', true, /\.svg$/))
