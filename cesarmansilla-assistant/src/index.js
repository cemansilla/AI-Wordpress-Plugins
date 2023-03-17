import { registerBlockType } from '@wordpress/blocks';
import { PlainText, RichText } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

registerBlockType("assistant-block/assistant", {
  title: "Asistente",
  icon: "megaphone",
  category: "widgets",

  attributes: {
    inputText: {
      type: "string",
      source: "text",
      selector: ".assistant-input-text",
    },
    outputText: {
      type: "string",
      source: "html",
      selector: ".assistant-output-text",
    },
  },

  edit: ({ attributes, setAttributes }) => {
    const { inputText, outputText } = attributes;

    const onInputChange = (newInputText) => {
      setAttributes({ inputText: newInputText });
    };

    const onButtonClick = () => {
      fetch(`${cm_vars.api_url}/endpoint?texto=${inputText}`)
        .then((response) => response.json())
        .then((data) => {
          setAttributes({ outputText: data.texto });
        });
    };

    return (
      <div>
        <h2>Asistente</h2>
        <label htmlFor="assistant-input">Texto:</label>
        <PlainText
          id="assistant-input"
          className="assistant-input-text"
          value={inputText}
          onChange={onInputChange}
        />
        <Button onClick={onButtonClick}>Enviar</Button>
        <div
          className="assistant-output-text"
          dangerouslySetInnerHTML={{ __html: outputText }}
        />
      </div>
    );
  },

  save: ({ attributes }) => {
    const { outputText } = attributes;

    return (
      <div className="assistant-output-text">
        <RichText.Content value={outputText} />
      </div>
    );
  },
});
