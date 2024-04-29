import styled from "styled-components";

export const NavbarContainer = styled.div`
    color :white;
    width: 85%;
    nav {
        background-color: #2a085c;
        width: 100%;
        height: 65px;
        display: flex;
        justify-content: space-between;
        border-radius : 15px;

        .icon-container {
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            width: 30%;
            background-color: green;
            display: flex;
            align-items: center;
            gap: 50px;
            padding-left : 40px;

            .icon {
                height: 50px;
                width: 50px;
                border-radius: 25px;
                background-color: white;
            }

            .search-bar {
                border: none;
                height: 30px;
                border-radius: 3px;
            }

        }

        .navigation-container {
            width: 40%;
            background-color: orange;
        }

        .login-logout-container {
            width: 20%;
            background-color: blue;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }

    }
`