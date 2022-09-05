import React from 'react';

import { format } from 'date-fns';
import { DayPicker } from 'react-day-picker';
import ReactDOM from 'react-dom/client';        

import 'react-day-picker/dist/style.css';


export default function Example() {
  const [selected, setSelected] = React.useState(new Date());
  
  let footer;
  if (selected) {
    footer = <input type="hidden" id="selected-date" value={format(selected, 'PPP')}></input>;
              // <input type="hidden" id="selected-day" value={format(selected, 'eeee')}></input>;
  }

  return (
      <DayPicker
        mode="single"
        selected={selected}
        onSelect={setSelected}
        footer={footer}
        weekStartsOn={1}
        styles={{
          month : {color : '#64676A', margin:'1em', height: '720px', paddingTop:'20px'},
          caption: { color : 'black', marginBottom : '2em', fontSize : '0.8em'},
          head_cell : { color: 'black', textTransform : 'capitalize', fontSize : '1em', fontWeight : '600'},
          tbody : { fontWeight : '600'},
          cell : { padding : '4px'},
        }}
      />
  );
}

if(document.getElementById('date-picker')){
    ReactDOM.createRoot(document.getElementById('date-picker')).render(<Example />);
};
