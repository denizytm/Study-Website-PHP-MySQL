import styled from "styled-components";

export const NavbarContainer = styled.div`
    color :white;
    width: 100%;

    nav {
        background-color: #2a085c;
        width: 100%;
        height: 65px;
        display: flex;
        justify-content: space-between;
        border-bottom-left-radius: 35px;
        border-bottom-right-radius: 35px;

        .icon-container {
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            width: 30%;
            //background-color: green;
            display: flex;
            align-items: center;
            gap: 50px;
            padding-left : 40px;

            img {
                height: 50px;
                width: 50px;
                border-radius: 100%;
            }

            .search-bar-container {
                width: 60%;
                display: flex;

                .search-bar {
                    border: none;
                    height: 30px;
                    outline: none;
                    width: 95%;
                    border-top-left-radius: 3px;
                    border-bottom-left-radius: 3px;
                }

                svg {
                    padding : 5px;
                    background-color: white;
                    height: 30px;
                    width: 35px;
                    color: black;
                    border-top-right-radius : 3px;
                    border-bottom-right-radius: 3px;
                    cursor: pointer;
                    border: 3px solid transparent;
                    transition: 0.5s ease-in-out;

                    &:hover {
                        border : 3px solid #bd2ab3;
                    }

                }

            }


        }

        .navigation-container {
            width: 45%;
            //background-color: orange;
            display : flex;
            justify-content: center;

            ul {
                height: 100%;
                display : flex;
                justify-content: space-around;
                align-items: center;
                width: 75%;
                list-style: none;
                padding-left: 0;

                li {
                    a {
                        color : white;
                        text-decoration: none;
                        transition: 0.5s ease-in-out;
                        border: 1px solid transparent;                        

                        &:hover {
                            border-bottom : 1.5px solid #bd2ab3;
                        }

                    }
                }

            }

        }

        .login-register-container {
            width: 25%;
            display: flex;
            align-items: center;
            //background-color: blue;
            justify-content: end;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            padding-right: 2%;
            gap : 10px;

            button {
                border: none;
                background-color: transparent;
                color: white;
                border: 1px solid transparent;
                transition: 0.5s ease-in-out;

                &:hover {
                    border-bottom: 1px solid #bd2ab3;
                }

            }

        }

    }
`