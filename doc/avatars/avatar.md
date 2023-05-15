# **Avatar Components**
The Avatar component is used to represent a user, and displays the profile picture, initials or fallback icon.

## Default Avatar `<x-avatar>`
You can display an avatar with just text or image

```html
<x-avatar
    text="Leat Sophat"
    src="https://avatars.githubusercontent.com/u/65520537?v=4">
</x-avatar>
```

## Sizing Avatar
The `Avatar` you can also set a custom size in `TailwindCss` class name.

```html
<x-avatar 
    text="Leat Sophat"
    src="https://avatars.githubusercontent.com/u/65520537?v=4"
    size="h-12 w-12">
</x-avatar>
```

## Colors Avatar
You can change the color with `color` prop

```html
<x-avatar 
    text="Leat Sophat"
    src="https://avatars.githubusercontent.com/u/65520537?v=4"
    color="bg-slate-500"
    textColor="bg-slate-500">
</x-avatar>
```

## Bordered Avatar
You can change the full style to a bordered `Avatar` with the `bordered` property.

```html
<x-avatar 
    text="Leat Sophat"
    src="https://avatars.githubusercontent.com/u/65520537?v=4"
    bordered="ring-2"
    borderColor="ring-red-500">
</x-avatar>
```

## Group Avatar `<x-group:avatar>`
You can group several avatars with the group component `<x-group:avatar>`

> Example data
```php
$data = [
    [
        "type"          =>  "circle",
        "text"          =>  "Sophat",
        "src"           =>  "https://avatars.githubusercontent.com/u/65520537?v=4",
        "size"          =>  "h-14 w-14",
        "color"         =>  "bg-slate-500",
        "textColor"     =>  "text-white",
        "bordered"        =>  "ring-2",
        "borderColor"   =>  "ring-red-500"
    ],
    [
        "type"          =>  "circle",
        "text"          =>  "Sophat",
        "src"           =>  "https://avatars.githubusercontent.com/u/65520537?v=4",
        "size"          =>  "h-14 w-14",
        "color"         =>  "bg-slate-500",
        "textColor"     =>  "text-white",
        "bordered"        =>  "ring-2",
        "borderColor"   =>  "ring-red-500"
    ],
]
```

```html
<x-group:avatar 
    :avatars="$data" 
    limit="1" 
    spaceX="-space-x-6">
</x-group:avatar>
```

## APIs

### Default Avatar Props

| Attribute | Type |Accepted Values | Description | Default |
|--|--|--|--|--|
| `type` | `string` | [Normal Type](#normal-type) | avatar type: `circle`, `squared` | `squared` |
| `text` | `string` | Any | Avatar Placeholder, Image alt | `null` |
| `src` | `string` | `URL` | Image url path | `null` |
| `size` | `string` | `TailwindCss` class name  [`WidthHeight`](#width-height) | avatar sizing using TailwindCss width and Height | `h-10`, `w-10` |
| `color` | `string` | `TailwindCss` class name [`Normal Background Color`](#normal-background-colors) | _ | `bg-gray-300` |
| `textColor` | `string` | `TailwindCss` class name [`Normal Text Color`](#normal-text-colors) | _ | `text-gray-900` |
| `borderColor` | `string` | `TailwindCss` class name [`Normal Ring Color`](#normal-ring-colors) | _ | `ring-gray-900` |
| `bordered` | `string` | `TailwindCss` class name  [`Normal Ring Color`](#normal-border-weight) | Ring Weight | `ring` |


### Group Avatar Props

| Attribute | Type |Accepted Values | Description | Default |
|--|--|--|--|--|
| `avatars` | `array` |[`Default Avatar Props`](#default-avatar-props) | The same `<x-avatar>` attributes | `[]` |
| `limit` | `number` | `number` | show avatar amount customizable | `3` |
| `spaceX` | `string` | `TailwindCss` class name  [`Normal Avatar Spacing`](#normal-avatar-spacing) | x spacing | `-space-x-6` |


## **Avatar types**

### Normal Type

```less
circle | squared
```

### Width Height

```less
h-10 w-10 | h-{n} w-{n}
```

### Normal Background Colors
```less
bg-gray-300 | bg-{colorName}-{colorLevel}
```

### Normal Text Colors
```less
text-gray-900 | text-{colorName}-{colorLevel}
```

### Normal Ring Colors
```less
 ring-gray-900 | ring-{colorName}-{colorLevel}
```


### Normal Border Weight
```less 
ring | ring-{n}
```

### Normal Avatar Spacing
```less
-space-x-6 | -space-x-{n} | space-x-{n}
```