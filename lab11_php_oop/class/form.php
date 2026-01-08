<?php
class Form
{
    private $fields = [];
    private $action;
    private $submit = "Submit Form";
    private $jumField = 0;

    public function __construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }

    public function addField($name, $label, $type = "text", $options = [])
    {
        $this->fields[] = [
            'name' => $name,
            'label' => $label,
            'type' => $type,
            'options' => $options
        ];
    }

    public function displayForm()
    {
        echo "<form action='{$this->action}' method='POST'>";
        echo '<table width="100%" border="0">';
        foreach ($this->fields as $field) {
            echo "<tr><td align='right' valign='top'>{$field['label']}</td><td>";
            switch ($field['type']) {
                case 'textarea':
                    echo "<textarea name='{$field['name']}' cols='50' rows='5'></textarea>";
                    break;
                case 'password':
                    echo "<input type='password' name='{$field['name']}' class='w-full p-2 border rounded'>";
                    break;
                default:
                    echo "<input type='text' name='{$field['name']}' class='w-full p-2 border rounded'>";
            }
            echo "</td></tr>";
        }
        echo "<tr><td colspan='2'><input type='submit' value='{$this->submit}' class='bg-blue-600 text-white px-4 py-2 rounded'></td></tr>";
        echo "</table></form>";
    }
}
?>