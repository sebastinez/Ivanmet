import * as React from "react"
import { Link } from "gatsby"

export const Services = () => {
  return (
    <div id="menu-Servicios">
      <div>
        <Link className="menu-item-servicios" to="/agentServices">
          <span style={{ color: "orange" }}>&#8718;</span>
          Agentes de Carga
        </Link>
      </div>
      <div>
        <Link className="menu-item-servicios" to="/customServices">
          <span style={{ color: "orange" }}>&#8718;</span>
          Servicios Aduaneros
        </Link>
      </div>
      <div>
        <Link className="menu-item-servicios" to="/loadServices">
          <span style={{ color: "orange" }}>&#8718;</span>
          Carga de Proyecto
        </Link>
      </div>
      <div>
        <Link className="menu-item-servicios" to="/officeServices">
          <span style={{ color: "orange" }}>&#8718;</span>
          Oficina Externa de Compras Internacionales
        </Link>
      </div>
      <div>
        <Link className="menu-item-servicios" to="/insuranceServices">
          <span style={{ color: "orange" }}>&#8718;</span>
          Seguros de Transporte{" "}
        </Link>
      </div>
    </div>
  )
}
