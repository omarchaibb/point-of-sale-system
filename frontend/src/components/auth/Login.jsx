import eye from "../../assets/eye.svg";

export default function Login() {
  return (
    <div className=" w-screen h-screen flex justify-center items-center bg-[#eff3f7]">
      <div className="login bg-white rounded-[0.938rem] shadow-md max-w-[540px] w-full px-5 sm:px-7 py-10 mx-auto">
        <h1 className="text-dark text-center mb-7 text-[2rem]">Sign In</h1>
        <form>
          <div className="mb-5">
            <label htmlFor="email">Email:</label>
            <span className="text-red-600">*</span>

            <div className="mt-2">
              <input
                type="text"
                placeholder="email"
                id="email"
                name="email"
                className="block w-full px-[15px] py-[11px] text-stone-500 border rounded-lg"
              />
            </div>
          </div>
          <div className="mb-5">
            <div className="flex justify-between items-center mb-2">
              <div>
                <label htmlFor="password">Password: </label>
                <span className="text-red-600 ">*</span>
              </div>
              <a href="" className="text-blue-600">
                Mot de passe oublié ?
              </a>
            </div>
            <div className="flex relative">
              <input
                type="password"
                placeholder="Password"
                id="password"
                name="password"
                className="block w-full px-[15px] py-[11px] text-stone-500 border rounded-lg"
              />
              <button className="bg-[#e9ecef] px-4 rounded-[0_0.5rem_0.5rem_0rem] ml-2 absolute right-0 top-0 bottom-0">
                <img src={eye} alt="eye" width={"20px"} />
              </button>
            </div>
          </div>
          <button
            type="submit"
            className="bg-[#6571ff] text-white w-full py-2 rounded-lg hover:bg-bg-[#5660d9]"
          >
            Login
          </button>
        </form>
        <div className="grid grid-cols-3 gap-2 mt-5">
          <button className="px-3 py-2 bg-green-500 text-white rounded-lg">
            Admin
          </button>
          <button className="px-3 py-2 bg-red-500 text-white rounded-lg">
            Sales
          </button>
          <button className="px-3 py-2 bg-blue-500 text-white rounded-lg">
            Purchases
          </button>
        </div>
      </div>
    </div>
  );
}
