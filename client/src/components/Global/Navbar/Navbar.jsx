
import { useEffect, useState } from "react";
import { NavbarContainer } from "./Navbar.style"
import { IoMdSearch } from "react-icons/io";
import Logo from "./../../../public/Navbar/logo.jpg";
import { Link } from "react-router-dom";

export function Navbar(){

    const [searchValue,setSearchValue] = useState("");

    useEffect(()=>{
        console.log(searchValue)
    },[searchValue])

    const handleSearch = () => {

    }

    return ( 
    <NavbarContainer>
        <nav>
            <div className="icon-container">
                <img src={Logo} />
                <div className="search-bar-container">
                <input 
                  className="search-bar" 
                  type="text" 
                  value={searchValue} 
                  onChange={(event)=>{setSearchValue(event.target.value)}} 
                />
                <IoMdSearch onClick={handleSearch} />
                </div>
            </div>
            <div className="navigation-container">
                <ul>
                    <li>
                        <Link to={""} >Home</Link>
                    </li>
                    <li>
                        <Link to={""} >Study</Link>
                    </li>
                    <li>
                        <Link to={""} >Questions</Link>
                    </li>
                    <li>
                        <Link to={""} >Contact Us</Link>
                    </li>
                </ul>
            </div>
            <div className="login-register-container">
                <button>Log In</button>
                <button>Register</button>
            </div>
        </nav>
    </NavbarContainer>           
  )
}