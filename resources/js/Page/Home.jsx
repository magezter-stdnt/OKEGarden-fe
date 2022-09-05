import ReactDOM from 'react-dom/client';        

export default function Home() {
    const heading = "Laravel 9 Vite  with React JS";
    return <div> {heading}</div>;
}
if(document.getElementById('app')){
    ReactDOM.createRoot(document.getElementById('app')).render(<Home />);
};
