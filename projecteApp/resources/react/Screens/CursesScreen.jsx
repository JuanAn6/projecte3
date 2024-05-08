import { useState, useContext, useEffect } from 'react'
import { MainContext } from '../context/MainContext'
import { Icon } from '@iconify/react/dist/iconify.js'
import List from '../Components/List'
import { Filter } from '../Components/Filter'
import axios from 'axios'
export const CursesScreen = () =>
{
    const [curses, setCurses] = useState([]);
    const [filtros, setFiltros] = useState({"cur_lloc" : '', "cur_nom" : ''});
    
	const getCurses = async() => {
		let response = await axios.get(get_all_curses)
		setCurses(response.data.curses);
	}
    
	useEffect(() => {
		console.log(filtros);
	},[filtros]);

	useEffect(() => {
		getCurses();
	},[]);
    return(
    <>
        <div className='min-w-full min-h-full bg-grey'>
            <div className='container py-2 mx-auto'>
                <div>
                    <h1 className='mb-6 text-5xl text-center text-blue2'>Curses <Icon icon="whh:raceflag" className='inline' /></h1>
                    <Filter props_filtros={filtros} setFiltros={setFiltros}></Filter>
                    <List curses={curses} filtros={filtros}></List>
                </div>
            </div>
        </div>
    </>
    )
}