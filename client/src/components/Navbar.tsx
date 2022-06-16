import { FC, ReactElement, useState } from "react";
import Hamburger from 'hamburger-react'

type NavbarProps = {
  userName: string
};

const Navbar: FC<NavbarProps> = ({ userName }): ReactElement => {
  const [isOpen, setOpen] = useState<boolean>(false);

  return (
    <nav className='flex justify-between items-center bg-green-600 text-white px-4 md:px-8 lg:px-12 py-3 shadow-md'>
      <div className='flex justify-center items-center gap-1'>
	<img alt="" src="assets/images/doko_logo.png" className='w-10 h-10'/>
	<div className='flex flex-col gap-0'>
	  <p className='font-bold text-lg p-0 m-0'> Doko </p>
	  <p className='text-xs p-0 m-0 relative -top-1'> Groceries at your doorstep</p>
        </div>
      </div>
      <ul className='hidden lg:flex gap-4 font-semibold text-base'>
	<li className="px-2 cursor-pointer border-b-2 border-transparent hover:border-white hover:text-gray-200"> Home </li>
	<li className="px-2 cursor-pointer border-b-2 border-transparent hover:border-white hover:text-gray-200"> Groceries </li>
        <li className="px-2 cursor-pointer border-b-2 border-transparent hover:border-white hover:text-gray-200"> About </li>
        <li className="px-2 cursor-pointer border-b-2 border-transparent hover:border-white hover:text-gray-200"> Contact Us </li>
      </ul>
      <div className="flex gap-4">
        <input name="" type="text" placeholder="Search..." className='hidden sm:block p-1.5 rounded-sm outline-none text-black'/>
        { userName && <button> { userName } </button>}
        { !userName && <button className='hidden sm:block font-semibold bg-green-800 py-2 px-4 rounded-sm hover:bg-green-700'>  Sign In </button>}
	{!userName && <div className='sm:hidden'> <Hamburger/> </div>}
      </div>
    </nav>
  );
}

export default Navbar;
