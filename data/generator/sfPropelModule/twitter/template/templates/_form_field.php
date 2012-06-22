[?php if ($field->isPartial()): ?]
  [?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
  [?php include_component('<?php echo $this->getModuleName() ?>', $name, array('form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
  [?php echo $form[$name]->renderRow(
    $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes,
    $label,
    $help ? __($help, array(), '<?php echo $this->getI18nCatalogue() ?>') : $form[$name]->renderHelp()
  ) ?]
[?php endif; ?]
