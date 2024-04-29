
import { NavbarContainer } from "./Navbar.style"

export function Navbar(){

    return ( 
    <NavbarContainer>
        <nav>
            <div className="icon-container">
                <div className="icon"></div>
                <input className="search-bar" type="text" size={30} />
            </div>
            <div className="navigation-container">b</div>
            <div className="login-logout-container">c</div>
        </nav>
    </NavbarContainer>           
  )
}