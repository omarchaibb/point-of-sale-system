import { createBrowserRouter } from "react-router-dom";
import Login from "../components/auth/Login";
import MainLayout from "../components/layouts/MainLayout";

export const AppRoute = createBrowserRouter([
  {
    index: true,
    element: <MainLayout />,
    // children: [{}],
  },
  {
    path: "/login",
    element: <Login />,
  },
]);
