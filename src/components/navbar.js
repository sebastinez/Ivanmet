import * as React from "react"
import { Link } from "gatsby"
import { Services } from "./services"
import { Projects } from "./projects"

export const Navbar = () => {
  const [secondary, setSecondary] = React.useState(null)
  return (
    <>
      <div className="menu">
        <div>
          <Link className="menu-item" to="/about">
            Quienes somos
          </Link>
        </div>
        <div>
          <button className="menu-item" onClick={() => setSecondary("services")}>
            Servicios
          </button>
        </div>
        <div>
          <Link className="menu-item" to="/clients">
            Clientes
          </Link>
        </div>
        <div>
          <button className="menu-item" onClick={() => setSecondary("projects")}>
            Proyectos Realizados
          </button>
        </div>
        <div>
          <Link className="menu-item" to="/contact">
            Contacto
          </Link>
        </div>
      </div>
      {secondary === "services" ? <Services /> : null}
      {secondary === "projects" ? <Projects /> : null}
    </>
  )
}
