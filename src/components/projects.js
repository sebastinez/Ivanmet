import * as React from "react"
import { Link } from "gatsby"

export const Projects = () => {
  return (
    <div id="menu-Proyectos">
      <div>
        <Link className="menu-item-proyectos" to="/expertise">
          <span style={{ color: "orange" }}>&#8718;</span>
          Background
        </Link>
      </div>
      <div>
        <Link className="menu-item-proyectos" to="/images">
          <span style={{ color: "orange" }}>&#8718;</span>
          Imagenes
        </Link>
      </div>
    </div>
  )
}
