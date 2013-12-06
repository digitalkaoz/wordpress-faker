<?php


namespace digitalkaoz\WordpressFaker;


/**
 * WordpressPersister
 * @author Robert Schönthal <robert.schoenthal@gmail.com>
 */
class WordpressPersister
{
    public function persist(array $objects)
    {
        foreach ($objects as $object) {
            /** @var Post $object */
            $data = get_object_vars($object);
            $meta = $data['meta'];
            unset($data['meta']);

            if (is_array($data['post_content'])) {
                $data['post_content'] = \wpautop(join("\n", $data['post_content']));
            }

            $id = \wp_insert_post($data);

            foreach ($meta as $key => $value) {
                \add_post_meta($id, $key, $value);
            }
        }

    }
} 